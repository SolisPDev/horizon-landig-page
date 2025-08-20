<template>
  <section id="contact" class="py-16 bg-zinc-900 text-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-4xl font-bold mb-4">Empecemos a Codificar Juntos</h2>
      <p class="text-lg mb-8 max-w-2xl mx-auto">
        Cuéntame sobre tu proyecto o déjame tu correo para estar en contacto y recibir actualizaciones sobre mi trabajo.
      </p>
      <form @submit.prevent="submitForm" class="max-w-md mx-auto space-y-4">
        <div>
          <input
            type="email"
            v-model="email"
            placeholder="Ingresa tu correo electrónico"
            required
            class="w-full px-4 py-3 rounded-lg bg-zinc-800 border border-lime-500 text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-lime-500 transition-colors"
          />
        </div>
        <button
          type="submit"
          class="w-full px-4 py-3 bg-lime-500 text-zinc-900 font-bold rounded-lg shadow-lg transition-transform transform hover:scale-105"
        >
          Suscribirme
        </button>
        <p v-if="successMessage" class="mt-4 text-lime-500 font-semibold">{{ successMessage }}</p>
        <p v-if="errorMessage" class="mt-4 text-red-500 font-semibold">{{ errorMessage }}</p>
      </form>
    </div>
  </section>
</template>

<script>
import axios from 'axios';

export default {
  name: 'ContactForm',
  data() {
    return {
      email: '',
      successMessage: '',
      errorMessage: '',
    };
  },
  methods: {
    async submitForm() {
      this.successMessage = '';
      this.errorMessage = '';
      try {
        const response = await axios.post('/subscribe', {
          email: this.email,
        });
        this.successMessage = response.data.message;
        this.email = ''; // Limpiar el campo
      } catch (error) {
        this.errorMessage = error.response.data.message || 'Ocurrió un error. Intenta de nuevo.';
      }
    },
  },
};
</script>