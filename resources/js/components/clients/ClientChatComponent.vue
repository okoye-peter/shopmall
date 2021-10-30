<template>
    <div class="chats_wrapper">
        <div class="chats_container shadow" ref="chatBox" v-show="showChat">
            <name-component
                :source="source"
                v-on:hide-chat-component="hideChat"
            ></name-component>
            <massages-component></massages-component>
            <form-component></form-component>
        </div>
        <aside @click.self="loadChatComponent" v-show="!showChat">
            <i class="far fa-comment-alt"></i>
        </aside>
    </div>
</template>

<script>
export default {
    props: {
        source: {
            required: true,
            type: String
        }
    },
    data() {
        return {
            showChat: false
        };
    },
    mounted() {
        console.log("Component mounted.");
    },
    methods: {
        loadChatComponent() {
            this.showChat = true;
            setTimeout(()=>{
                this.$refs.chatBox.classList.add("active");
            },350)
        },
        hideChat() {
            this.$refs.chatBox.classList.remove("active");
            setTimeout(() => {
                this.showChat = false;
            },600)
        }
    }
};
</script>

<style>
.chats_wrapper {
    display: inline-block;
    position: fixed;
    z-index: 10000;
    bottom: 2em;
    right: 1em;
}
.chats_wrapper .chats_container {
    width: 18em;
    border-radius: 0.3em;
    transform-origin: bottom right;
    transition: all ease 0.5s;
    transform: scale(0);
}
.chats_wrapper .chats_container.active {
    transform: scale(1);
}

.chats_wrapper > aside {
    padding: 0.85em;
    background: #e15613f0;
    border-radius: 50%;
    color: white;
    height: 3em;
    width: 3em;
    margin-left: auto;
    text-align: center;
    cursor: pointer;
}
</style>
