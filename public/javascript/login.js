document.getElementById('loginform').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = 'sigma';
    const correctPassword = '1234';

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if(username == correctUsername && password == correctPassword){
        alert('Login Berhasil');
        window.location.href = '/';
    }else{
        alert('Login Gagal');
    }
});