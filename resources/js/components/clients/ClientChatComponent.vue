<template>
    <div class="chats_wrapper">
        <div class="chats_container shadow" @hideChatComponent="hideChat($event)">
            <name-component :source="source"></name-component>
            <massages-component></massages-component>
            <form-component></form-component>
        </div>
        <aside @click.self="loadChatComponent">
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
    mounted() {
        console.log("Component mounted.");
    },
    methods: {
        loadChatComponent($event) {
            $event.target.classList.add("fadeEffect");
            document.querySelector(".chats_container").classList.add("show");
            $event.target.addEventListener(
                "animationend",
                function() {
                    this.classList.add("hide");
                },
                false
            );
        },
        hideChat($event){
          // console
          console.log($event.target)
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
      position: relative;
      bottom: -27.2em;
      transition: all ease-out 0.75s;
      opacity: 0;
  }
  .chats_wrapper .chats_container.show {
      opacity: 1;
      bottom: -1.7em;
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
  .chats_wrapper > aside.fadeEffect {
      animation-name: fadeOut;
      animation-duration: 1s;
      animation-timing-function: ease;
      animation-fill-mode: forwards;
  }

  .chats_wrapper > aside.hide {
      display: none;
  }

  @keyframes fadeOut {
      0% {
          opacity: 0.75;
      }
      25% {
          opacity: 0.5;
      }
      50% {
          opacity: 0.25;
      }
      100% {
          opacity: 0;
          visibility: hidden;
      }
  }
</style>
