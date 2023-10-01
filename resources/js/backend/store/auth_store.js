import { defineStore } from 'pinia'

export const use_auth_store = defineStore('auth_store', {
    state: () => ({
        is_auth: 0,
        auth_info: {
            full_name: "shefat",
            email: "a@g.com"
        }
    }),
    getters: {
        doubleCount: (state) => state.count * 2,
    },
    actions: {
        check_is_auth: async function () {
            let that = this;
            await window.cookieStore.get('AXRF-TOKEN')
                .then(cookie => {
                    if(!cookie){
                        return location.href = "/"
                    }
                    console.log('token set');
                    let token = `Bearer ${cookie.value}`;

                    // fetch("/api/user", {
                    
                    //     method: "GET",
                    //     headers: {
                    //         "Content-Type": "application/json",
                    //         "Authorization": token,
                    //         // 'Content-Type': 'application/x-www-form-urlencoded',
                    //     },
                    // })
                })
        }
    },
})
