<script>
export default {
    props: {
        header: {
            default: ""
        },
        footer: {
            default: ""
        },
        shadow: {
            default: () => false,
        },
        darkHeader: {
            default: () => false,
        },
        darkFooter: {
            default: () => false,
        },
    },
    data() {
        return {

        };
    }
}
</script>

<template>
    <div class="flex flex-col gap-2 border border-stone-200 dark:border-stone-800 rounded-lg"
        :class="[
            shadow ? 'shadow' : ''
        ]"
    >
        <div v-if="header" class="py-2 px-4" :class="[
            darkHeader ? 'dark:bg-stone-800  dark:text-stone-200 bg-stone-100 text-stone-800' : '',
        ]">{{ header }}</div>
        <slot class="p-4" name="body"></slot>
        <div v-if="footer" class="py-2 px-4" :class="[
            darkFooter ? 'dark:bg-stone-800 dark:text-stone-200 bg-stone-100 text-stone-800' : '',
        ]">{{ footer }}</div>
    </div>
</template>
