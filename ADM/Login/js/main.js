const showHiddenPass = (loginPass, loginEye) => {
    const input = document.getElementById(loginPass)
          iconEye = document.getElementById(loginEye)

    iconEye.addEventListener('click', () =>{
        // Muda a senha para texto

        if(input.type === 'password'){
            input.type = 'text'

            //mudar icon
            iconEye.classList.add('bx-show')
            iconEye.classList.remove('bx-low-vision')
        } else{
            // muda texto pra senha
            input.type = 'password'

            //mudar icon
            iconEye.classList.remove('bx-low-vision')
            iconEye.classList.add('bx-show')
            
        }
    })
}

showHiddenPass('login-pass', 'login-eye');