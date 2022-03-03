function onSuccess(googleUser) {
                        console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                        window.location.href = "https://pca.edu.co/";
                    }
                    function onFailure(error) {
                        console.log(error);
                    }
                    function renderButton() {
                        gapi.signin2.render('my-signin2', {
                            'scope': 'profile email',
                            'width': 240,
                            'height': 50,
                            'longtitle': true,
                            'theme': 'dark',
                            'onsuccess': onSuccess,
                            'onfailure': onFailure
                        });
                    }