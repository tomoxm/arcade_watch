<template>
    <div class="container">
        <progress class="progress is-small is-primary" max="100">15%</progress>
<progress class="progress is-danger" max="100">30%</progress>
<progress class="progress is-medium is-dark" max="100">45%</progress>
<progress class="progress is-large is-info" max="100">60%</progress>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
