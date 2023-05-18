export default class Ajax {
    #token;
    constructor(token) {
        this.#token = token;
    }
    get(vegpont, callback) {
        fetch(vegpont, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        })
            .then((response) => response.json())
            .then((data) => callback(data))

            .catch((error) => {
                console.error("Error:", error);
            });
    }

    post(vegpont, callback) {
        fetch(vegpont, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": this.#token,
            },
        })
            .then((response) => response.json())
            .then(callback(data))

            .catch((error) => {
                console.error("Error:", error);
            });
    }
    delete(vegpont, callback) {
        fetch(vegpont, {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": this.#token,
            },
        })
            .then((response) => response.json())
            .then(callback(data))

            .catch((error) => {
                console.error("Error:", error);
            });
    }
}
