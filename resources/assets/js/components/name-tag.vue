<template>
    <div style="position:relative">
        <div class="fancy-background"></div>
        <h1 class="username">Jane Kwan</h1>
        <img src="/images/avatar.jpeg" class="avatar">
    </div>
</template>

<style scoped>
    div.fancy-background {
        background-image: url('/images/name-background.jpeg');
        background-size: cover;
        width: 100%;
        height: 20vh;
    }
    .username {
        position: absolute;
        bottom: 0px;
        color: white;
        margin-left: 20px;
        font-weight: 100;
    }
    img.avatar {
        position: absolute;
        bottom: -30px;
        right: 20px;
        height: 80px;
        width: 80px;
        border-radius: 50%;
        z-index: 3;
    }
</style>

<script>
    export default {
        data: () => ({})
    }
</script>