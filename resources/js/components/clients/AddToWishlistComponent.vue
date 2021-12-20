<template>
    <form action="" method="post">
        <button v-show="inWishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="remove from wishlist" name="remove_from_wishlist" @click.prevent="removeFromWishlist">
            <i class="fas fa-heart"></i>
        </button>  
        <button v-show="!inWishlist"  data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist" name="add_to_wishlist" @click.prevent="addToWishlist">
            <i class="far fa-heart"></i>
        </button>    
    </form>
</template>

<script>
export default { 
    props:{
        product: {
            type: Object,
            required: true
        }
    },
    data: function() { 
        return {
            inWishlist: false
        }
    },
    beforeMount(){
        axios.get(`/wishlists/${this.product.id}/available`).then(response => {
            if(response.data.available){
                this.inWishlist = true;
            }
        });
    },
    methods:{
        addToWishlist(){
            axios.post('/wishlists',{
                product_id: this.product.id
            }).then(response=>{
                this.inWishlist = true;

                $('span.wishlist').html(response.data)
                iziToast.success({
                    title: 'Success',
                    position:'topRight',
                    timeout:3000,
                    message: `${this.product.name} added to wishlist`
                });
            }).catch(error=>{
                console.log('error',error.response)
            })
        },
        removeFromWishlist(){
            axios.post(window.location.origin+'/wishlists/remove',{
                product_id: this.product.id
            }).then(response=>{
                this.inWishlist = false;
                $('span.wishlist').html(response.data)
                iziToast.success({
                    title: 'Success',
                    position:'topRight',
                    timeout:3000,
                    message: `${this.product.name} removed from wishlist`
                });
            }).catch(error=>{
                console.log('error',error.response)
            })
        }
        
    }

}
</script>

<style>

</style>