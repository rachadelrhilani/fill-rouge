import './bootstrap';
console.log("Le JS est bien chargé !");
import { initRegisterValidation } from './auth-validation';

// On attend que le DOM soit chargé
document.addEventListener('DOMContentLoaded', () => {
    initRegisterValidation();
});