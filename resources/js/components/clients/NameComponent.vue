<template>
    <div class="admin_name_wrapper">
        <button class="close">
            <i class="fas fa-times"></i>
        </button>
        <div class="d-flex">
            <img :src="source" alt="" />
            <span class="name">Patrick Avander</span>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        source: {
            required: true,
            type: String
        }
    }
};
</script>

<style>
.admin_name_wrapper {
    position: relative;
    padding: 0.5em 0.75em;
    background: #1c83a2;
    border-radius: 0.3em 0.3em 0em 0em;
}
.admin_name_wrapper .d-flex {
    align-items: center;
    color: white;
    font-family: 'Roboto';
    font-size: 14px;
}
.admin_name_wrapper button{
    position: absolute;
    right: 1em;
    top: 0.5em;
    font-size: 10px;
    height: 1.6em;
    width: 1.6em;
    border-radius: 50%;
    color: white;
    text-align: center;
}
.admin_name_wrapper button:hover{
    background: hsl(194deg 71% 26%);
}
.admin_name_wrapper .d-flex img {
    height: 3em;
    width: 3em;
    border-radius: 50%;
    margin-right: 1.5em;
}
</style>
