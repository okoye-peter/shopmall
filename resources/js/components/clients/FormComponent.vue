<template>
    <div class="form_wrapper">
        <form action="" method="post">
            <textarea name="" id=""></textarea>
            <button class="add_file">
                <i class="fas fa-paperclip"></i>
            </button>
            <button class="send_message">
                <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </div>
</template>

<script>
export default {};
</script>

<style>
.form_wrapper {
    background: white;
    border-radius: 0em 0em 0.3em 0.3em;
}
.form_wrapper form {
    position: relative;
}
.form_wrapper form textarea {
    width: calc(100% - 0.6em);
    margin: 0.3em;
    height: 2.5em;
    resize: none;
    border: 1px solid lightgray;
    border-radius: 0.3em;
    outline: none;
    padding: 0.3em 4em 0.3em 0.3em;
    margin-bottom: 0;
    font-size: 12px;
}
.form_wrapper form textarea:focus {
    border-color: #1c83a2;
}
.form_wrapper form button {
    top: 0.2em;
    position: absolute;
    font-size: 1.1rem;
    color: #808080c2;
}
.form_wrapper form button.add_file {
    right: 2.5em;
}
.form_wrapper form button.send_message {
    right: 1.2em;
}
</style>
