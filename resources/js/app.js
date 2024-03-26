import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import { aliases, mdi } from 'vuetify/iconsets/mdi'
import PerfectScrollbar from 'vue3-perfect-scrollbar';
import '@/assets/scss/style.scss';
import VueApexCharts from 'vue3-apexcharts';

import Layout from '@/shared/template/Layout.vue'

const BLUE_THEME = {
  name: 'BLUE_THEME',
  dark: false,
  variables: {
      'border-color': '#e5eaef'
  },
  colors: {
      primary: '#0085db',
      secondary: '#707a82',
      info: '#46caeb',
      success: '#4bd08b',
      warning: '#f8c076',
      error: '#fb977d',
      indigo:'#8763da',
      lightprimary: '#e5f3fb',
      lightinfo:'#e1f5fa',
      lightsecondary: '#e7ecf0',
      lightsuccess: '#dffff3',
      lighterror: '#ffede9',
      lightwarning: '#fff6ea',
      lightindigo:'#f1ebff',
      textPrimary: '#2A3547',
      textSecondary: '#2A3547',
      borderColor: '#e5eaef',
      inputBorder: '#DFE5EF',
      containerBg: '#ffffff',
      background: '#f0f5f9',
      hoverColor: '#f6f9fc',
      surface: '#fff',
      grey100: '#707a82',
      grey200: '#111c2d',
      darkbg:'#2a3447',
      bglight:'#f5f8fb',
      bgdark:'#111c2d'
  }
};

const vuetify = createVuetify({
  components,
  directives,
  icons: {
    iconfont: 'mdi',
    values: {
      mdi,
    },
  },
    theme: {
      defaultTheme: 'BLUE_THEME',
      themes: {
          BLUE_THEME,
      }
  },
  defaults: {
      VCard: {
          rounded: 'xl'
      },
      VTextField: {
          variant: 'outlined',
          density: 'comfortable',
          color: 'primary'
      },
      VTextarea: {
          variant: 'outlined',
          density: 'comfortable',
          color: 'primary'
      },
      VSelect: {
          variant: 'outlined',
          density: 'comfortable',
          color: 'primary'
      },
      VListItem: {
          minHeight: '45px'
      },
      VTooltip: {
          location: 'top'
      }
  }
})


createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./views/**/*.vue', { eager: true })
    let page = pages[`./views/${name}.vue`]

    page.default.layout = page.default.layout || Layout
    

    if (name.startsWith('Admin/') || name.startsWith('VO/') || name.startsWith('Example/')) {
      if (name.startsWith('Admin/Login') || name.startsWith('VO/Login') || name.startsWith('Example/Login')) {
        page.default.layout = undefined
      } else{
        page.default.layout = Layout
      }
    }  

    
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(vuetify)
      .use(PerfectScrollbar)
      .use(VueApexCharts)
      .mount(el)

  },
  title: (title) => `${title} - Project Name`,
  progress: true,
})
