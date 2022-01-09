<div class="header">
    <div class="float">
        <div class="center ">
            <div class="header_mobile">
                <div>
                    <img src="img/LOGO.png" />
                </div>
                
                <input class="menu-btn" type="checkbox" id="menu-btn" />
                <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                <div class="contact">
                        <a><i class="fas fa-phone-alt"></i>&nbsp;<small>(16)</small> 99347-5070</a>
                </div>
                <ul class="menu">
                    <li><a href="">Página 1</a></li>
                    <li><a href="">Página 2</a></li>
                    <li><a href="">Página 3</a></li>
                    <li><a href="">Página 4</a></li>
                    <li><a href="">Página 5</a></li>
                    <li><a href="">Página 6</a></li>
                    <li><a href="./upload_image.php">ENVIAR ARQUIVO</a></li>
                </ul>
</div>

        </div>
    </div>
</div>
<style>
    a{
       color: #777575; 
    }
    .header_mobile {
        position: relative;
        width: 100%;
        z-index: 3;  
        margin: 20px 0px;     
    }

    .header_mobile ul {
        margin: 0;
        padding: 0;
        list-style: none;
        overflow: hidden;
    }

    .header_mobile li a {
        display: block;
        padding: 20px 20px;       
        text-decoration: none;
        border-bottom: 1px solid #a9a9a9;
    }
   
    .header_mobile .logo {
        display: block;
        float: left;
        font-size: 2em;
        padding: 10px 20px;
        text-decoration: none;
    }

    /* menu */

    .header_mobile .menu {
        clear: both;
        max-height: 0;
        transition: max-height .2s ease-out;
    }

    /* menu icon */

    .header_mobile .menu-icon {
        cursor: pointer;
        display: block;
        left: 90%;
        position: relative;
        user-select: none;
    }
    .header_mobile .menu-icon .navicon {
        background: #333;
        display: block;
        height: 2px;
        position: relative;
        transition: background .2s ease-out;
        width: 18px;
    }

    .header_mobile .menu-icon .navicon:before,
    .header_mobile .menu-icon .navicon:after {
        background: #333;
        content: '';
        display: block;
        height: 100%;
        position: absolute;
        transition: all .2s ease-out;
        width: 100%;
    }

    .header_mobile .menu-icon .navicon:before {
        top: 5px;
    }

    .header_mobile .menu-icon .navicon:after {
        top: -5px;
    }

    /* menu btn */

    .header_mobile .menu-btn {
        display: none;
    }

    .header_mobile .menu-btn:checked~.menu {
        max-height: 100%;/* tamanho do accordion */
    }

    .header_mobile .menu-btn:checked~.menu-icon .navicon {
        background: transparent;
    }

    .header_mobile .menu-btn:checked~.menu-icon .navicon:before {
        transform: rotate(-45deg);
    }

    .header_mobile .menu-btn:checked~.menu-icon .navicon:after {
        transform: rotate(45deg);
    }

    .header_mobile .menu-btn:checked~.menu-icon:not(.steps) .navicon:before,
    .header_mobile .menu-btn:checked~.menu-icon:not(.steps) .navicon:after {
        top: 0;
    }

    .contact {display: none;}

    /* 48em = 768px */

    @media (min-width: 48em) {
        .contact {
            display: block;
            position: absolute;
            right: 10px;
            top: 30px;
            font-size: 2rem;
        }

        .header li {
            float: left;
        }

        .header li a {
            padding: 0px 10px;
            border: none;
        }

        .header .menu {
            clear: none;
            float: right;
            max-height: none;
        }

        .header .menu-icon {
            display: none;
        }
    }
</style>


<!--

<div class="cabecalho">
                <div class="logo">
                    <img src="img/LOGO.png" />
                </div>
                <div class="info">
                    <div class="contact">
                        <a><i class="fas fa-phone-alt"></i>&nbsp;<small>(16)</small> 99347-5070</a>
                    </div>
                    <div class="pages">
                        <div><a>Página 1</a></div>
                        <div><a>Página 2</a></div>
                        <div><a>Página 3</a></div>
                        <div><a>Página 4</a></div>
                        <div><a>Página 5</a></div>
                        <div><a>Página 6</a></div>
                        <div class="pz"><a href="./upload_image.php">ENVIAR ARQUIVO</a></div>
                    </div>
                </div>
            </div>
-->