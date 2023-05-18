import Ajax from "../model/Ajax";

export default class Controller {
    #model;
    constructor() {
        $token = $('meta[name="csrf-token"]').attr("content");
        this.#model = new Ajax($token);
    }
}
