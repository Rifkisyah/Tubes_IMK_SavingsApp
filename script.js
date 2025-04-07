function toggleSideNav(){
    if(document.getElementById('side-nav').style.width == '0px'){
        document.getElementById('side-nav').style.width = '250px';
        document.getElementById('top-nav').style.marginLeft = '250px';
        document.getElementById('main-container').style.paddingLeft = '25%';
        document.getElementById('content-container').style.marginLeft = '0';
    } else {
        document.getElementById('side-nav').style.width = '0';
        document.getElementById('top-nav').style.marginLeft = '0';
        document.getElementById('main-container').style.paddingLeft = '8%';
        document.getElementById('content-container').style.marginLeft = '10%', paddingBottom = '0px', marginTop = '0px';

    }
}

function toggleSavingsModal(){
    const opacity = document.getElementById('black-opacity');
    const modal = document.getElementById('savings-modal');

    opacity.style.display = 'block';
    modal.style.display = 'block';
}

function closeSavingsModal(){
    let isCloseModal = confirm("apa kamu yakin ingin keluar?");

    if(isCloseModal){
        const opacity = document.getElementById('black-opacity');
        const modal = document.getElementById('savings-modal');

        opacity.style.display = 'none';
        modal.style.display = 'none';

        document.getElementById('savings-name').value = '';
        document.getElementById('savings-amount').value = '';
    }
}

function addBoxContent(){
    const opacity = document.getElementById('black-opacity');
    const modal = document.getElementById('savings-modal');
    let titleValue = document.getElementById('savings-name').value;
    let amountValue = document.getElementById('savings-amount').value;

    if(titleValue == '' || amountValue == ''){
        alert('Data Masih Kosong!');
        return;
    } else {
        opacity.style.display = 'none';
        modal.style.display = 'none';

        const container = document.getElementById('content-container');
        const boxContent = document.createElement('div');
        const title = document.createElement('h3');
        const amount = document.createElement('h3');
        const linkContent = document.createElement('p');
        
        boxContent.className = 'box-content';
        title.innerText = titleValue;
        amount.innerText = amountValue;
        linkContent.innerText = 'Open';
    
        document.getElementById('empty-label').style.display = 'none';
        boxContent.appendChild(title);
        boxContent.appendChild(amount);
        boxContent.appendChild(linkContent);
        container.appendChild(boxContent);

        document.getElementById('savings-name').value = '';
        document.getElementById('savings-amount').value = '';
    }
}

function showPassword(){
    let pass = document.getElementById('password-field');
    if(pass.type === 'password'){
        pass.type = 'text';
    } else {
        pass.type = 'password';
    }
}

window.addEventListener('pageshow', function(e){
    if(e.persisted){
        this.document.getElementById('auth-form').reset();
    }
});

const path = window.location.pathname;
if(path.includes('Halaman_Beranda.php')){
    window.history.pushState(null, "", window.location.href);
    window.onpopstate = function(){
        window.location.replace("./auth/Halaman_Masuk.php");
    };
}

if(path.includes('Halaman_Masuk.php') && shouldRedirectToSignIn()){
    window.location.replace("./Halaman_Masuk.php");
}
if(path.includes('Halaman_Daftar.php') && shouldRedirectToSignIn()){
    window.location.replace("./Halaman_Daftar.php");
}

function shouldRedirectToSignIn(){
    return false;
}

function shouldRedirectToSignUp(){
    return false;
}