<template>

    <ul class="navbar-nav bottom-collapse-navbar mx-auto">
        <li v-for="(item, i) in items" :key='i' :class="classes_li(item)">
            <div v-if="item.active_item != 0">
                <a v-if="item.module_statuse != false" 
                v-bind:data-toggle="item.children.length > 0 ? data_toggle_info() : false" 
                :aria-expanded="item.children.length > 0 ? String(item.active) : false"
                :class="classes_a(item)" :href="item.href"> {{ item.title }} </a>
            </div>

            <menu-bottom-component v-if="(item.children.length > 0 ) && item.active_item != 0" 
                :items="item.children">
            </menu-bottom-component>
                
        </li>
    </ul>

</template>

<script>
    export default {
        props: {
            items: {
                type: Array,
                default: [],
            }
        },
        methods: {
            data_toggle_info: function() {
                return 'collapse'
            },
            nav_id: function(item) {
                return 'navbar_bottom_' + item.id;
            },
            classes_a: function(item) {

                var classes = [];
                classes.push('nav-link');

                if (item.children.length > 0) {
                    classes.push('dropdown-toggle');
                }

                return classes.join(' ');
            },
            classes_li: function(item) {

                var classes = [];
                classes.push('nav-item');

                if (item.active) {
                    classes.push('active');
                }

                return classes.join(' ');
            },
            trans() {
                return document.head.querySelector('meta[name="translation-activate"]').content;
            },
        },
        mounted() {
            //
        }
    }
</script>

<style lang="scss" scoped>

@import '~@@/components/default/_settings.scss';

.bottom-navbar {
    background-color: rgb(250, 248, 248);
    li {
        ul { 
            display: none;
            padding-top:5px;
        }
        &:hover {
            > ul {
                display: block;
                position: absolute;
                z-index: 99999999;
            }
        }
        li {
            list-style: none;
            background-color: white;
            width:250px;
            min-width:215px;
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
                right: 0;
                top: 40px;
            }
        }
    }
    .bottom-collapse-navbar {
        text-transform:uppercase;
        letter-spacing: 1px;
        font-size:15px;
        a {
            text-decoration:none;
            color: $secondarycolor;
            margin: 0 15px;
            &:hover{
                font-weight: bold;
                transition: all 0.3s ease;
            }
        }
        .active {
            font-weight:bold; 
        }
        ul li {
            a {
                margin:0;
                padding:8px;
                display: block;
                text-decoration: none;
                white-space: nowrap;
                &:hover {
                    font-weight: bold;
                }
            }
        } 
    }
}

////////////////////////////////////////////////////////////
// Media Query Navbar header //////////////////////////////
//////////////////////////////////////////////////////////

@media all and (max-width: 760px) {
    .bottom-navbar { 
        // background-color: transparent; 
        box-shadow: none!important;
    }
}

</style>