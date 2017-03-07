<template>

    <ul :id="o.id" class="dropdown-content" v-for="o in config.menusDropDown">
        <li v-for="item in o.items">
            <a :href="item.url">{{ item.name }}</a>
        </li>
    </ul>
    <div class="navbar-fixed">
        <nav >
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo right">Code Contas</a>

                <a href="#" data-activates="nav-mobile" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>

                <ul id="nav-mobile" class="side-nav">
                    <li v-for="o in config.menus">
                        <a :href="o.url">{{ o.name }}</a>
                    </li>
                </ul>

                <ul class="left hide-on-med-and-down">
                    <li v-for="o in config.menus">
                        <a v-if ="o.dropdownId" class="dropdown-button" href="#" :data-activates="o.dropdownId">
                            {{ o.name }} <i class="material-icons right">arrow_drop_down</i>
                        </a>
                        <a v-else :href="o.url">{{ o.name }}</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>

</template>

<script type="text/javascript">
    export default {

        ready() {

            console.log('document ready');

            $('.dropdown-button').dropdown();

        },

        props: {

            config: {

                type: Object,
                default() {
                    return {
                        name: '',
                        menus: [],
                        menusDropDown: [],
                        urlLogout: '/admin/logout'
                    }
                }

            }

        }

    }
</script>

