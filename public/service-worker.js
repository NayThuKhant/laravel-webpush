self.addEventListener('push', function (e) {
    if (!(self.Notification && self.Notification.permission === 'granted')) {
        //notifications aren't supported or permission not granted!
        return;
    }

    if (e.data) {

        var title = 'Notification';
        var options = {
            body: 'This is the body of the notification.',
            icon: 'path/to/icon.png',
            actions: [
                {action: 'action1', title: 'Action 1'},
                {action: 'action2', title: 'Action 2'}
            ]
        };

        const message = e.data.json();
        console.log(message);
        self.registration.showNotification(title, options).then(r => console.log(r));
    }
});
