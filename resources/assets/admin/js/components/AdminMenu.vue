<template>

    <ul :id="o.id" class="dropdown-content" v-for="o in config.menusDropDown">
        <li v-for="item in o.items">
            <a :href="item.url">{{ item.name }}</a>
        </li>
    </ul>

    <ul id="dropdown-logout" class="dropdown-content">
        <li>
            <a :href="config.urllogout" @click.prevent="goToLogout()">
                Sair
            </a>

            <form id="logout-form" :action="config.urlLogout" method="POST" style="display: none;">
                <input type="hidden" name="_token" :value="config.csrfToken">
            </form>
        </li>
    </ul>

    <div class="navbar-fixed">
        <nav >
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo left">Code Financeiro Admin</a>

                <a href="#" data-activates="nav-mobile" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>

                <ul id="nav-mobile" class="side-nav">
                    <li v-for="o in config.menus">
                        <a :href="o.url">{{ o.name }}</a>
                    </li>
                </ul>

                <ul class="right hide-on-med-and-down">
                    <li v-for="o in config.menus">
                        <a v-if ="o.dropdownId" class="dropdown-button" href="#" :data-activates="o.dropdownId">
                            {{ o.name }} <i class="material-icons right">arrow_drop_down</i>
                        </a>
                        <a v-else :href="o.url">{{ o.name }}</a>
                    </li>
                    <li>
                        <a class="dropdown-button" href="#" data-activates="dropdown-logout">
                            {{ config.name }} <i class="material-icons right">arrow_drop_down</i>
                        </a>
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

        methods: {

            goToLogout() {

                $('#logout-form').submit();

            }

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

