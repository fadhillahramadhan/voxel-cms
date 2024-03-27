import { defineStore } from 'pinia'

export const useSidebarStore = defineStore('sidebar', {
    state: () => {
        return {
            drawer: true,
        }
    },
    actions: {
        toggleSidebar() {
            console.log('toggleSidebar')
            this.drawer = !this.drawer
        },
        closeSidebar() {
            this.drawer = false
        },
    }
})