class EvaluateFormController{
    constructor(API, ToastService){
        'ngInject';

        this.API = API;
        this.ToastService = ToastService;

        this.contents = "Thank you for your help!";
        this.title = "This is a first Question";
        this.myValue = 50;
    }

    submit() {
        var data = {
            option: 'create',
            question_id: 1,
            answers: this.myValue
        };

        this.API.all('evaluation').post(data).then((response) => {
            //this.toastService.show('Successfully Saved');
            this.ToastService.show(response);
        });        
    }

    $onInit(){
        this.question = ''; 
        /*this.API.all('question/index').post({qindex: 1}).then((response) => {
            this.ToastService.show(response);
        });       */
    }

    getquestion() {

        let data = {
            qindex: 1
        };

        this.API.all('question/index').post(data).then(() => {
            this.ToastService.show("Successfully Saved");
        });
    }
}

export const EvaluateFormComponent = {
    templateUrl: './views/app/components/evaluate_form/evaluate_form.component.html',
    controller: EvaluateFormController,
    controllerAs: 'vm',
    bindings: {}
}
