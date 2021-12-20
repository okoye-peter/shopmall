<template>
  <form action="" @submit.prevent="addToCart" method="post" data-parsley-validate id="add_to_cart">
      <div class="notInCart" v-show="!inCart">
        <div class="quantity-input">
            <input v-model="quantity" type="text" name="quantity" data-parsley-type="integer" data-parsley-required data-parsley-min="1"> 

            <button class="btn-reduce" type="button" @click="decreaseQuantity">
                <i class="fa fa-minus"></i>
            </button>
            <button class="btn-increase" type="button" @click="increaseQuantity">
                <i class="fa fa-plus"></i>
            </button>
        </div>
        <button type="submit" class="add_to_cart_btn" v-show="displayBtn">
            Add to Cart
        </button>
        <div class="flex justify-center mt-4" v-show="!displayBtn">
            <img src="/assets/images/gif/Rolling-1s-200px.gif" class="loading"/>
        </div>
      </div>
      <div class="inCart mt-16" v-show="inCart">
            <div class="flex text-2xl">
                <button class="mx-2" >&plus;</button>
                <input type="text" value="1" class="mx-2 text-center" />
                <button class="mx-2">&minus;</button>
            </div>
      </div>
    </form>
</template>
<script>

export default {
    name: 'AddToCartComponent',
    props:{
        product: {
            type: Object,
            required: true
        }
    },
    data(){
        return {
            quantity: 1,
            displayBtn: true,
            inCart:false
        }
    },
    methods: {
        addToCart(){
            this.displayBtn = false;
            axios.post(`/carts`,{
                quantity: this.quantity,
                product_id: this.product.id
            }).then(response => {
                this.displayBtn = true;
                this.inCart = true;
                $('span.cart').html(response.data)
                iziToast.success({
                    title: 'Success',
                    position:'topRight',
                    timeout:3000,
                    message: `${this.product.name} add to cart`
                });
            }).catch(error => {
                this.displayBtn = true;
                if(error.response.status == 422){
                    iziToast.error({
                        title: 'Error',
                        position:'topRight',
                        timeout:3000,
                        message: error.response.data.errors.quantity[0]
                    });
                }else if(error.response.status == 401){
                    window.location.assign('/login');
                }
            })
        },
        increaseQuantity() {
            this.quantity++;
        },
        decreaseQuantity() {
            if(this.quantity > 1){
                this.quantity--;
            }
        }
    },
    beforeMount(){
        axios.get(`/carts/${this.product.id}/available`).then(response => {
            if(response.data.available){
                this.inCart = true;
            }
        })
    }
    


}
</script>

<style>
    img.loading{
        width: 2vw;
    }
    .inCart .flex button{
        padding: 0.4em;
        background: hsl(34deg 87% 57%);
        width: 2em;
        border-radius: 0.3em;
        color: white;

    }
    .inCart .flex input{
        width: 2em;
    }
</style>