<template>
    <div id="app">
        <div>
            <router-view></router-view>
        </div>
        <NotificationsList></NotificationsList>
    </div>
</template>

<script>
import NotificationsList from "../components/NotificationsList.vue";
export default {
    name: "app",
    components: {
        NotificationsList
    }
};
</script>
