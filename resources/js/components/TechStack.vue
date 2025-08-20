<template>
  <section id="technologies" class="py-16 bg-zinc-800 text-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-4xl font-bold mb-12">Tecnologías que he usado.</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8">
        <div
          v-for="(tech, index) in technologies"
          :key="index"
          class="flex flex-col items-center p-4 rounded-lg transition-transform transform hover:scale-110 duration-300"
        >
          <img :src="tech.icon" :alt="tech.name" class="w-16 h-16 mb-2">
          <span class="text-sm font-semibold mt-2">{{ tech.name }}</span>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import laravelIcon from '../assets/laravel-icon.svg';
import vueIcon from '../assets/vue-icon.svg';
import javascriptIcon from '../assets/javascript-icon.svg';
import phpIcon from '../assets/php-icon.svg';
import mysqlIcon from '../assets/mysql-icon.svg';
import progress from '../assets/progress-icon.svg';
import springBoot from '../assets/springboot-icon.svg';
import postgress from '../assets/postgresql.svg';
import trelloIcon from '../assets/trello.svg';
import gitHubIcon from '../assets/github.svg';
//import tailwindIcon from '../assets/tailwind-icon.svg';

export default {
  name: 'TechStack',
  data() {
    return {
      technologies: [
        { name: 'PHP', icon: phpIcon },
        { name: 'JavaScript', icon: javascriptIcon },
        { name: 'Progress', icon: progress},
        { name: 'SpringBoot', icon: springBoot},
        { name: 'Laravel', icon: laravelIcon },
        { name: 'Vue.js', icon: vueIcon },
        { name: 'MySQL', icon: mysqlIcon },
        { name: 'PostgreSQL', icon: postgress },
        { name: 'Trello', icon: trelloIcon },
        { name: 'GitHub', icon: gitHubIcon },
        //{ name: 'Tailwind CSS', icon: tailwindIcon },
      ],
    };
  },
};
</script>