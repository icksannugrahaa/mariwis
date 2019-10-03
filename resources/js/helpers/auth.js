import Axios from "axios";

export function login(credentials) {
    return new Promise((res, rej) => {
        Axios.post('api/auth/login', credentials)
            .then((response) => {
                res(response.data);
            })
            .catch((err) => {
                rej('Email atau Kata Sandi anda salah !!');
            });
    })
}

export function getLocalUser() {
    const userStr = localStorage.getItem("user");

    if (!userStr) {
        return null;
    }

    return JSON.parse(userStr);
}
