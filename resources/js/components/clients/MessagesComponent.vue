<template>
    <div class="massage_wrapper">
        <ul>
            <li>
                <div class="msj macro">
                    <div class="avatar">
                        <img
                            class="img-circle"
                            src="https://lh6.googleusercontent.com/-lr2nyjhhjXw/AAAAAAAAAAI/AAAAAAAARmE/MdtfUmC0M4s/photo.jpg?sz=48"
                        />
                    </div>
                    <div class="text text-l">
                        <p>Hello Tom...</p>
                        <p><small>10:14 AM</small></p>
                    </div>
                </div>
            </li>
            <li>
                <div class="msj-rta macro">
                    <div class="text text-r">
                        <p>Hi, Pablo</p>
                        <p><small>10:14 AM</small></p>
                    </div>
                    <div class="avatar">
                        <img
                            class="img-circle"
                            src="https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg"
                        />
                    </div>
                </div>
            </li>
            <li>
                <div class="msj macro">
                    <div class="avatar">
                        <img
                            class="img-circle"
                            src="https://lh6.googleusercontent.com/-lr2nyjhhjXw/AAAAAAAAAAI/AAAAAAAARmE/MdtfUmC0M4s/photo.jpg?sz=48"
                        />
                    </div>
                    <div class="text text-l">
                        <p>What would you like to talk about today?</p>
                        <p><small>10:14 AM</small></p>
                    </div>
                </div>
            </li>
            <li>
                <div class="msj-rta macro">
                    <div class="text text-r">
                        <p>Tell me a joke</p>
                        <p><small>10:14 AM</small></p>
                    </div>
                    <div class="avatar">
                        <img
                            class="img-circle"
                            src="https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg"
                        />
                    </div>
                </div>
            </li>
            <li>
                <div class="msj macro">
                    <div class="avatar">
                        <img
                            class="img-circle"
                            src="https://lh6.googleusercontent.com/-lr2nyjhhjXw/AAAAAAAAAAI/AAAAAAAARmE/MdtfUmC0M4s/photo.jpg?sz=48"
                        />
                    </div>
                    <div class="text text-l">
                        <p>
                            Spaceman: Computer! Computer! Do we bring battery?!
                        </p>
                        <p><small>10:14 AM</small></p>
                    </div>
                </div>
            </li>
            <li>
                <div class="msj-rta macro">
                    <div class="text text-r">
                        <p>LOL</p>
                        <p><small>10:14 AM</small></p>
                    </div>
                    <div class="avatar">
                        <img
                            class="img-circle"
                            src="https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg"
                        />
                    </div>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {};
</script>

<style>
.massage_wrapper {
    height: 18rem;
    background: white;
    overflow-y: auto;
    padding: 10px;
    background: #ebebeb;
}

.massage_wrapper ul li {
    width: calc(100% - 11px);
}
.massage_wrapper ul li div .avatar {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 25%;
    float: left;
    padding-right: 10px;
}
.massage_wrapper ul li div .avatar .img-circle {
    border-radius: 50%;
    height: 2.3em;
    width: 2.3em;
}
.msj {
    float: left;
    background: white;
}

.msj:before {
    width: 0;
    height: 0;
    content: "";
    top: -5px;
    left: -14px;
    position: relative;
    border-style: solid;
    border-width: 0 13px 13px 0;
    border-color: transparent #ffffff transparent transparent;
}

.text {
    width: 75%;
    display: flex;
    flex-direction: column;
}
.text-l {
    float: left;
    padding-right: 10px;
}
.text > p:first-of-type {
    width: 100%;
    margin-top: 0;
    margin-bottom: auto;
    line-height: 13px;
    font-size: 12px;
}
.text > p:last-of-type {
    width: 100%;
    text-align: right;
    color: silver;
    margin-bottom: -7px;
    margin-top: auto;
}
.msj-rta {
    float: right;
    background: whitesmoke;
}
.macro {
    margin-top: 5px;
    width: 85%;
    border-radius: 5px;
    padding: 5px;
    display: flex;
}
.text-r {
    float: right;
    padding-left: 10px;
}
.massage_wrapper ul li div.msj-rta .avatar {
    padding: 0px 0px 0px 10px;
}
.msj-rta:after {
    width: 0;
    height: 0;
    content: "";
    top: -5px;
    left: 14px;
    position: relative;
    border-style: solid;
    border-width: 13px 13px 0 0;
    border-color: whitesmoke transparent transparent transparent;
}
</style>
