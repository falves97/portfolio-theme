export class Menu {
    private menuButtom: HTMLDivElement | null;
    private navMenu: HTMLDivElement | null;

    constructor() {
        this.menuButtom = document.querySelector(".fbalves-btn-menu");
        this.navMenu = document.querySelector('.menu-menu-principal-container');
    }

    public displayMenu(): void {
        if (this.menuButtom != null) {
            this.menuButtom.addEventListener("click", event => {

                this.navMenu?.classList.toggle("fbalves-show-menu");
                this.menuButtom?.classList.toggle("fbalves-btn-open");
            });
        }
    }
}