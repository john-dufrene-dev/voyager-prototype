<template>

<ul class="navbar-nav ml-auto right-navbar"> 

    <li v-if=!$_auth_autorize()>
        <a v-bind:class="{'nav-link':true, 'active':(routes('login') === _path() || routes('register') === _path() )}" 
        :href="routes('login')" ><i class="fas fa-user-alt"></i> {{ $t('auth.account') }}</a>
    </li>

    <li v-else>
        <a href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-alt"></i> {{ $_auth_infos().name }} <span class="caret"></span></a>
        <ul>
            <li class="right-first">
                <a v-bind:class="{'nav-link':true, 'active':(routes('pages.account') === _path() )}"
                :href="routes('pages.account')"> {{ $t('auth.account') }} </a></li>
            <li class="right-second"><a class="nav-link" :href="routes('logout')"
                @click.prevent="logout"> {{ $t('generic.logout') }} </a>
            </li>

            <form id="logout-form" :action="routes('logout')" method="POST" style="display: none;">
                <input type="hidden" name="_token" :value="_token()">
            </form>
        </ul>
    </li>
    
</ul>

</template>

<script>

export default {
    data () {
        return {
            // 
        }
    },
    created() {
        //
    },
    methods: {
        logout() {
            document.getElementById('logout-form').submit()
        }
    }
}

</script>

<style lang="scss" scoped>

@import '~@@/components/default/_settings.scss';

#headerNavbar {
    li {
        ul { 
            display: none;
        }
        &:hover {
            > ul {
                display: block;
                position: absolute;
            }
        }
        li {
            background-color: rgb(228, 253, 246);
            width:100%;
            max-width:215px;
            box-shadow:0 0.125rem 0.25rem rgba(0, 0, 0, 0.050);
            &:hover li {
                float:none;
            }
        }
    }
    ul {
        &:before,&:after {
            content: " "; /* 1 */
            display: table; /* 2 */
        }
        &:after {
            clear: both;
        }
        ul {
            ul {
                right: 100%;
                top: 0;
            }
        }
    }
    .right-navbar {
        a {
            i {
                padding: 8px;
                font-size:18px;
                color: $primarycolor;
            }
        }
    }
    .left-navbar, .right-navbar {
        text-transform:uppercase;
        letter-spacing: 1px;
        font-size:15px;
        a {
            text-decoration:none;
            color:#000;
            &:hover{
                
                font-weight: bold;
                transition: all 0.3s ease;
            }
        }
        .active {
            font-weight:bold; 
        }
        ul li {
            display: block;
            position: relative;
            float: left;
            z-index: 99999999999;
            a {
                margin:0;
                padding:8px;
                display: block;
                text-decoration: none;
                white-space: nowrap;
                &:hover {
                    font-weight: bold;
                    // background-color:$light;
                }
            }
        } 
    }
    .right-navbar {
        ul {
        position:relative;
            .right-first, .right-second {
                left:0;
                padding:5px;
                position:absolute;
                background-color: white;
                width:250px;
                min-width:215px;
                box-shadow:0 0.125rem 0.25rem rgba(0, 0, 0, 0.050);
            }
            .right-second {
                top:45px;
            }
        }
    }
}

////////////////////////////////////////////////////////////
// Media Query Navbar header //////////////////////////////
//////////////////////////////////////////////////////////

@media all and (max-width: 760px) {

    #headerNavbar, .bottom-navbar {
        // padding-top:15px;
        li {
            li {
                background-color:transparent;
                padding:0;
                box-shadow:none;
            }
            &:hover > ul {
                position:relative;
                display: flex;
                flex-direction: column;
                background-color:transparent;
            }
        }
        ul {
            ul {
                ul {
                    left: 0;
                }
            }
        }
        .left-navbar, .right-navbar, .bottom-collapse-navbar {
            a {
                font-size:13px;
                padding: 7px;
                &:hover{
                    background-color:transparent;
                }
            }
            .active {
                font-weight:bold;
            }
            ul li {
                a {
                    margin:0;
                    padding:7px;
                    &:hover{
                        background-color:transparent;
                    }
                }
            }
        }
    }
    
}

</style>