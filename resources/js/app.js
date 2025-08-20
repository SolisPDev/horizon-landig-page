import './bootstrap';
import { createApp } from 'vue';

import HeroSection from './components/HeroSection.vue';
import TechStack from './components/TechStack.vue';
import ContactForm from './components/ContactForm.vue';
import VisitCounter from './components/VisitCounter.vue';

window.axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

const app = createApp({});
app.component('hero-section', HeroSection);
app.component('tech-stack', TechStack);
app.component('contact-form', ContactForm);
app.component('visit-counter', VisitCounter);
app.mount('#app');