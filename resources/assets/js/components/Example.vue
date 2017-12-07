<template>
    <ul id="example-1">
  <li v-for="list in lists" v-bind:key="list">
    {{ list }}
  </li>
</ul>
</template>

<script>
export default {
    data() {
        return {
            message: 'Hello Vue',
            lists: [
                'satu', 'dua', 'tiga'
            ],
        }
    }
}
</script>
