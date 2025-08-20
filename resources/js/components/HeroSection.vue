<template>
  <section class="flex items-center justify-center min-h-screen text-center bg-zinc-900 text-white p-4">
    <div class="space-y-4">
      <img :src="logo" alt="Horizondevs.net" class="w-30 h-auto mx-auto animate-fade-in-down">
      <h1 class="text-5xl md:text-7xl font-bold animate-fade-in-up">
        <span class="text-lime-500">Codificando</span> el futuro
      </h1>
      <p class="text-xl md:text-2xl mt-4 animate-fade-in-up animation-delay-500">
        Transformando ideas en realidad digital, un proyecto a la vez.
      </p>
      <a href="#contact" class="inline-block mt-8 px-8 py-3 bg-lime-500 text-zinc-900 font-bold rounded-full shadow-lg transition-transform transform hover:scale-105 animate-fade-in-up animation-delay-1000">
        Únete a la lista
      </a>
    </div>
  </section>
</template>

<script>
import logo from '../assets/horizondevsh.png';
export default {
  name: 'HeroSection',
  data() {
    return {
      logo: logo, // Asigna el logo importado a la propiedad 'logo' del estado
    };
  },
};
</script>

<style scoped>
/* Keyframes para la animación de entrada desde arriba */
@keyframes fade-in-down {
from {
opacity: 0;
transform: translateY(-20px);
}
to {
opacity: 1;
transform: translateY(0);
}
}

/* Keyframes para la animación de entrada desde abajo (existente) */
@keyframes fade-in-up {
from {
opacity: 0;
transform: translateY(20px);
}
to {
opacity: 1;
transform: translateY(0);
}
}

/* Aplicación de las animaciones */
.animate-fade-in-down {
animation: fade-in-down 1s ease-out forwards;
opacity: 0;
}

.animate-fade-in-up {
animation: fade-in-up 1s ease-out forwards;
opacity: 0; /* Asegura que el elemento esté oculto antes de la animación */
}

/* Retrasos para animaciones secuenciales */
.animation-delay-500 {
animation-delay: 0.5s;
}
.animation-delay-1000 {
animation-delay: 1s;
}
</style>