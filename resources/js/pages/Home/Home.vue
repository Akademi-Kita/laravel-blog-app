<template>
    <div>
        <div class="custom-container mt-14 inline-flex lg:flex-row flex-col gap-4 lg:gap-14">
            <div
                class="headline bg-no-repeat bg-cover flex flex-col justify-center"
            >
                <div>
                    <img src="/assets/headline.jpeg" alt="" class="rounded-md"/>
                </div>
                <div class="flex justify-center">
                    <div
                        class="bg-white title-headline relative w-3/4 py-3 px-5 md:py-5 md:px-10 rounded-md"
                    >
                        <div class="text-sm">
                            <span>Vendas</span>
                            <span></span>
                        </div>
                        <div class="text-sm md:text-xl" :style="{ color: '#5D6370' }">
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Alias, nulla.
                        </div>
                    </div>
                </div>
            </div>
            <div class="populars">
                <a href="">
                    <div class="popular-btn text-white px-10 py-1.5 rounded-sm">
                        Populars
                    </div>
                </a>
                <popular-component :border="true"></popular-component>
                <popular-component :border="true"></popular-component>
                <popular-component :border="false"></popular-component>
            </div>
        </div>
    </div>
</template>

<script>
import PopularComponent from "./components/PopularComponent";
export default {
    data() {
        return {
            headlineSrc: "url('/assets/headline.jpeg')"
        };
    },
    components: {
        PopularComponent
    }
};
</script>

<style>
.custom-container {
    row-gap: 10px;
}

.headline {
    flex-basis: 60%;
    border-radius: 0.5vw;
}

.custom-container > div {
    height: 60vh;
}

.populars {
    flex-basis: 40%;
}

.title-headline {
    height: fit-content;
    top: -100%;
    transform: translateY(50%);
    box-shadow: 3px 1px 15px 1px rgba(130, 130, 130, 0.5);
}

.popular-btn {
    background-color: #10bb56;
    width: fit-content;
}

.headline > div > img {
    height: 100%;
}

</style>
