// member-tab
new Vue({
    el: '#member-tabs',
    data: { activetab: 1 },
});
// member-accordion
Vue.component("Expander", {
    template: `
<div class="Expander ta-c mt-10">
    <div class="Expander__trigger" 
      @click="open=!open" 
      :class="open?'active':'beforeBorder'">
        <svg 
          class="Expander__trigger-Icon dis-ib" 
          :class="{open:open}" 
          width="40" height="12" 
          stroke="#787878">
            <polyline points="12,2 20,10 28,2" stroke-width="3" fill="none"></polyline>
        </svg>
        <p class="m-0 dis-ib">訂單詳情</p>
    </div>
    <transition :name="animation">
        <div class="Expander__body clearfix" v-show="open">
            <slot></slot>
        </div>
    </transition>
</div>
  `,
    props: {
        title: {
            type: String,
            default: 'title'
        },
        animation: {
            type: String,
            default: 'bounceIn'
            // validator: prop => ['leftToRight', 'bounceIn', 'bottomToTop'].includes(prop)
        }
    },
    data() {
        return {
            open: false
        }
    }
})


const vm = new Vue({
    el: "#app",
    data: {
    },
    computed: {
    },
    methods: {
    },
    mounted() {
    }
});