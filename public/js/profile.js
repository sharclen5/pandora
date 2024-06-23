function showProfile() {
    document.getElementById('profile').style.display = 'block';
    document.getElementById('community').style.display = 'none';
    document.getElementById('security').style.display = 'none';
    document.getElementById('users').style.display = 'none';
    document.getElementById('profileLink').classList.add('bg-blue-700', 'border', 'rounded-full');
    document.getElementById('communityLink').classList.remove('bg-blue-700', 'border', 'rounded-full');
    document.getElementById('securityLink').classList.remove('bg-blue-700', 'border', 'rounded-full');
    document.getElementById('usersLink').classList.remove('bg-blue-700', 'border', 'rounded-full');
}

function showCommunity() {
    document.getElementById('profile').style.display = 'none';
    document.getElementById('community').style.display = 'block';
    document.getElementById('security').style.display = 'none';
    document.getElementById('users').style.display = 'none';
    document.getElementById('profileLink').classList.remove('bg-blue-700', 'border', 'rounded-full');
    document.getElementById('communityLink').classList.add('bg-blue-700', 'border', 'rounded-full');
    document.getElementById('securityLink').classList.remove('bg-blue-700', 'border', 'rounded-full');
    document.getElementById('usersLink').classList.remove('bg-blue-700', 'border', 'rounded-full');
}

function showSecurity() {
    document.getElementById('profile').style.display = 'none';
    document.getElementById('community').style.display = 'none';
    document.getElementById('security').style.display = 'block';
    document.getElementById('users').style.display = 'none';
    document.getElementById('profileLink').classList.remove('bg-blue-700', 'border', 'rounded-full');
    document.getElementById('communityLink').classList.remove('bg-blue-700', 'border', 'rounded-full');
    document.getElementById('securityLink').classList.add('bg-blue-700', 'border', 'rounded-full');
    document.getElementById('usersLink').classList.remove('bg-blue-700', 'border', 'rounded-full');
}

function showUsers() {
    document.getElementById('profile').style.display = 'none';
    document.getElementById('community').style.display = 'none';
    document.getElementById('security').style.display = 'none';
    document.getElementById('users').style.display = 'block';
    document.getElementById('profileLink').classList.remove('bg-blue-700', 'border', 'rounded-full');
    document.getElementById('communityLink').classList.remove('bg-blue-700', 'border', 'rounded-full');
    document.getElementById('securityLink').classList.remove('bg-blue-700', 'border', 'rounded-full');
    document.getElementById('usersLink').classList.add('flex', 'bg-blue-700', 'border', 'rounded-full');
}

