export function initRegisterValidation() {
    const form = document.getElementById('registerForm');
    if (!form) return;

    const f = {
        name: document.getElementById('name'),
        email: document.getElementById('email'),
        comp: document.getElementById('company'),
        pass: document.getElementById('password'),
        conf: document.getElementById('password_confirmation'),
        btn: document.getElementById('submitBtn'),
    };

    const validate = () => {
        const vName = f.name.value.trim().length >= 3;
        
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const vEmail = emailRegex.test(f.email.value);

        const vComp = f.comp.value.trim().length >= 2;

        const vPassLen = f.pass.value.length >= 8;
        const vMatch = f.pass.value === f.conf.value;

        

        // test global
        const isOk = vName && vEmail && vComp && vPassLen && vMatch;

        // Debug simple dans la console
        console.log(`Nom:${vName} | Email:${vEmail} | Co:${vComp} | Pass:${vPassLen} | Match:${vMatch}`);

        // Mise à jour du bouton
        if (isOk) {
            f.btn.disabled = false;
            f.btn.classList.remove('opacity-50', 'cursor-not-allowed');
            f.btn.classList.add('hover:scale-[1.02]', 'bg-indigo-600');
        } else {
            f.btn.disabled = true;
            f.btn.classList.add('opacity-50', 'cursor-not-allowed');
            f.btn.classList.remove('hover:scale-[1.02]', 'bg-indigo-600');
        }
    };


    [f.name, f.email, f.comp, f.pass, f.conf].forEach(input => {
        if(input){
          input.addEventListener('input', validate);  
        } 
    });
}