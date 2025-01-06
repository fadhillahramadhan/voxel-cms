<template>
    <Head>
        <title>About</title>
        <meta name="description" content="My App" />
    </Head>
    <v-container>
        <v-row>
            <v-col cols="12">
                <v-card class="pa-5" elevation="2">
                    <v-card-title class="text-h4 mb-4">About</v-card-title>
                    <v-card-text>
                        <v-row dense>
                            <v-col cols="12">
                                <p>
                                    This is a simple voxel editor. It is a
                                    web-based application that allows users to
                                    create 3D models using voxels. Voxels are 3D
                                    pixels that can be used to create 3D models.
                                    The voxel editor allows users to create,
                                    edit, and save 3D models in a simple and
                                    intuitive way.
                                </p>
                            </v-col>
                            <v-col cols="12">
                                <p>
                                    The voxel editor is built using Vue.js and
                                    Three.js. Vue.js is a JavaScript framework
                                    for building user interfaces, while Three.js
                                    is a JavaScript library for creating 3D
                                    graphics on the web. The voxel editor uses
                                    Vue.js to create the user interface and
                                    Three.js to render the 3D models.
                                </p>
                            </v-col>
                            <v-col cols="12">
                                <p>
                                    The voxel editor allows users to create 3D
                                    models by placing voxels on a 3D grid. Users
                                    can select different colors and shapes for
                                    the voxels and place them in different
                                    positions on the grid. The voxel editor also
                                    allows users to rotate and scale the 3D
                                    models and save them to a file.
                                </p>
                            </v-col>
                            <v-col cols="12">
                                <p>
                                    The voxel editor is a simple and fun way to
                                    create 3D models. It is designed to be easy
                                    to use, even for users who are new to 3D
                                    modeling. The voxel editor is a great tool
                                    for creating 3D models for games,
                                    animations, and other projects.
                                </p>
                            </v-col>
                        </v-row>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    name: "About",
};
</script>

<style scoped>
p {
    margin-bottom: 1rem;
}
</style>
