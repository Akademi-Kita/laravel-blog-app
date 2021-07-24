<template>
    <div
        :class="
            this.border
                ? 'inline-flex flex-row popular-div gap-4 md:gap-6 py-8 border-b'
                : 'inline-flex flex-row popular-div gap-4 md:gap-6 py-8 '
        "
    >
        <div>
            <img src="/assets/headline.jpeg" alt="" class="rounded-md w-full" />
        </div>
        <div class="flex flex-col justify-around md:text-sm text-xs">
            <div :style="{ color: '#5D6370' }">
                Vendas
            </div>
            <div>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Consequatur, consequuntur.
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        border: Boolean
    },
    data() {
        return {};
    }
};
</script>

<style>
/* md -> to up */
@media (min-width: 768px) {
    .popular-div > div:first-child {
        flex-basis: 35%;
    }
    .popular-div > div:last-child {
        flex-basis: 65%;
    }
}

.popular-div > div:first-child {
    flex-basis: 35%;
}

.popular-div div img {
    height: 100%;
    width: 100%;
}

.popular-div > div:last-child {
    flex-basis: 65%;
}
</style>
