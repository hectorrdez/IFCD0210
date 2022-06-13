<template>
    <h1>Articulo</h1>
    {{ id }}
</template>
<script>
export default {
    props: {
        id: {
            type: Number,
            required: true
        }
    }
};
</script>