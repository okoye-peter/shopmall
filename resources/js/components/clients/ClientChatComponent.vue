<template>
  <div class="chats_wrapper">
    <div class="chats_container">
      
      <name-component :source="source"></name-component>
      <massages-component></massages-component>
      <form-component></form-component>
    </div>
    <aside>
      <i class="far fa-comment-alt"></i>
    </aside>
  </div>
</template>

<script>
export default {
  props:{
    source:{
            required:true,
            type:String
        }
  },
  mounted(){
    console.log('Component mounted.')
  }
}
</script>

<style>
  .chats_wrapper{
    display: inline-block;
    position: fixed;
    bottom: 3em;
    right: 3em;
    
  }

  .chats_wrapper  .chats_container{
    background: lightgray;
    width: 18em;
    border-radius: 0.3em;
  }
  .chats_wrapper >aside{
    padding: 0.85em;
    background: #e15613f0;
    border-radius: 50%;
    color: white;
    height: 3em;
    width: 3em;
    text-align: center;}
</style>
