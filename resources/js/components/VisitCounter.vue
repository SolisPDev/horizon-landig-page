<template>
  <div class="text-center py-8 bg-zinc-900 text-zinc-400">
    <p v-if="visits !== null" class="text-sm">
      Visitas: {{ visits }}
    </p>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'VisitCounter',
  data() {
    return {
      visits: null,
    };
  },
  mounted() {
    this.recordAndGetVisits();
  },
  methods: {
    async recordAndGetVisits() {
      try {
        const response = await axios.post('/record-visit');
        this.visits = response.data.visits;
      } catch (error) {
        console.error('Error al registrar la visita:', error);
      }
    },
  },
};
</script>