<template>
    <div>
        <nav class="flex flex-row justify-around">
            <div class="flex items-center">
                <h1>Brand here</h1>
            </div>
            <div class="flex items-center justify-around">
                <router-link
                    :to="{ name: 'home' }"
                    class="py-6 px-3 hover:bg-gray-300"
                    >Home</router-link
                >
                <router-link
                    :to="{ name: 'about' }"
                    class="py-6 px-3 hover:bg-gray-300"
                    >About</router-link
                >
                <router-link
                    :to="{ name: 'blog' }"
                    class="py-6 px-3 hover:bg-gray-300"
                    >Blog</router-link
                >
                <router-link
                    :to="{ name: 'latests' }"
                    class="py-6 px-3 hover:bg-gray-300"
                    >Latests</router-link
                >
                <router-link
                    :to="{ name: 'popular' }"
                    class="py-6 px-3 hover:bg-gray-300"
                    >Popular</router-link
                >
            </div>
            <div class="flex items-center justify-end">
                <h1>Search here</h1>
            </div>
        </nav>
    </div>
</template>

<script>
export default {};
</script>

<style>
nav > :first-child,
nav > :last-child {
    flex-basis: 30%;
}

nav > :nth-child(2) {
    flex-basis: 40%;
}

.active {
    border-bottom: 3px solid #48d683;
    color: #48d683;
}

/* * { */
/* box */
/* } */
</style>
