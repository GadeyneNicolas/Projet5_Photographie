class Add {
    init() {
        $(`#show_Portrait`).click(this.showPortrait.bind(this));
        $(`#show_Animal`).click(this.showAnimal.bind(this));
        $(`#show_Landscape`).click(this.showLandscape.bind(this));
        // this.showAnimal();
        // this.showLandscape();
    }

    showPortrait() {
        $(`#showPortrait`).css(`display`, `block`);
        $(`#showLandscape`).css(`display`, `none`);
        $(`#showAnimal`).css(`display`, `none`);
    }

    showAnimal() {
        $(`#showAnimal`).css(`display`, `block`);
        $(`#showPortrait`).css(`display`, `none`);
        $(`#showLandscape`).css(`display`, `none`);
    }

    showLandscape() {
        $(`#showLandscape`).css(`display`, `block`);
        $(`#showAnimal`).css(`display`, `none`);
        $(`#showPortrait`).css(`display`, `none`);
    }

}

$(document).ready(function () { // fonction du carrousel
    const show = new Add();
    show.init();
 });