self.addEventListener('push', function (e) {
    if (!(self.Notification && self.Notification.permission === 'granted')) {
        //notifications aren't supported or permission not granted!
        return;
    }

    if (e.data) {
        const message = e.data.json();
        console.log(message);
        self.registration.showNotification(message.title, {
            body: message.body,
            icon: message.icon,
            actions: message.actions
        }).then(r => console.log(r));
    }
});
