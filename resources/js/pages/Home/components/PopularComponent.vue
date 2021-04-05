<template>
    <div
        :class="
            this.border
                ? 'inline-flex flex-row popular-div gap-6 py-8 border-b'
                : 'inline-flex flex-row popular-div gap-6 py-8 '
        "
    >
        <div>
            <img src="/assets/headline.jpeg" alt="" class="rounded-md" />
        </div>
        <div class="flex flex-col justify-around">
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
        return {
            border: this.border
        };
    }
};
</script>

<style>
.popular-div > :first-child {
    flex-grow: 1;
}

.popular-div div img {
    height: 10vh;
    width: 15vw;
}

.popular-div > :last-child {
    flex-grow: 3;
}
</style>
