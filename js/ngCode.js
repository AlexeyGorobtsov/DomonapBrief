var app = angular.module('app', []);

app.controller('ctrl_main', function ($scope) {

    // Initialize my model - this is important!
    $scope.audience = {checked: false};
    $scope.site_type = {checked: false};
    $scope.design_focus = {checked: false};
    $scope.inventory = {checked: false};
    $scope.page_differents = {checked: false};
    $scope.payment_methods = {checked: false};
    $scope.orders_receive = {checked: false};
    $scope.cms = {checked: false};


});


app.controller('ctrl_task', function ($scope) {
    $scope.header = 'Наша задача?';

    $scope.items = [{
        'id': 'task0',
        'type': 'radio',
        'name': 'group',
        'titel': 'Создать новый сайт'
    }, {
        'id': 'task1',
        'type': 'radio',
        'name': 'group',
        'titel': 'Изменить или улучшить существующий'
    }]
});
app.controller('ctrl_site_type', function ($scope) {
    $scope.header = 'Давайте выберем тип Вашего сайта:';

    $scope.items = [{
        'id': 'site_type0',
        'type': 'radio',
        'name': 'group',
        'titel': 'Целевая страница (landing-page)'
    }, {
        'id': 'site_type1',
        'type': 'radio',
        'name': 'group',
        'titel': 'Корпоративный сайт'
    }, {
        'id': 'site_type2',
        'type': 'radio',
        'name': 'group',
        'titel': 'Информационный портал'
    }, {
        'id': 'site_type3',
        'type': 'radio',
        'name': 'group',
        'titel': 'Сайт визитная карточка'
    }, {
        'id': 'site_type4',
        'type': 'radio',
        'name': 'group',
        'titel': 'Интернет магазин'
    }, {
        'id': 'site_type5',
        'type': 'radio',
        'name': 'group',
        'titel': 'Личный блог'
    }]
});
app.controller('ctrl_timeframe', function ($scope) {
    $scope.header = 'Желаемые сроки на реализацию проекта:';

    $scope.items = [{
        'id': 'timeframe0',
        'type': 'radio',
        'name': 'group',
        'titel': 'Срочно'
    }, {
        'id': 'timeframe1',
        'type': 'radio',
        'name': 'group',
        'titel': '1 -3 месяца'
    }, {
        'id': 'timeframe2',
        'type': 'radio',
        'name': 'group',
        'titel': 'Более трех месяцев'
    }, {
        'id': 'timeframe3',
        'class': 'hidden-cmp',
        'type': 'radio',
        'name': 'group',
        'titel': 'empty'
    }]
});
app.controller('ctrl_budget', function ($scope) {
    $scope.header = 'Планируемый бюджет проекта:';

    $scope.items = [{
        'id': 'budget0',
        'type': 'radio',
        'name': 'group',
        'titel': 'До 50.000 рублей'
    }, {
        'id': 'budget1',
        'type': 'radio',
        'name': 'group',
        'titel': '50.000 - 100.000'
    }, {
        'id': 'budget2',
        'type': 'radio',
        'name': 'group',
        'titel': '100.000 - 200.000'
    }, {
        'id': 'budget3',
        'type': 'radio',
        'name': 'group',
        'titel': 'Более 200.000'
    }]
});
app.controller('ctrl_site_support', function ($scope) {
    $scope.header = 'Дальнейшая поддержка и обслуживание сайта:';

    $scope.items = [{
        'id': 'site_support0',
        'type': 'radio',
        'name': 'group',
        'titel': 'Возьмут на себя ваши специалисты'
    }, {
        'id': 'site_support1',
        'type': 'radio',
        'name': 'group',
        'titel': 'Возьмем на себя мы'
    }]
});
app.controller('ctrl_work_activities', ['$scope', function ($scope) {
    $scope.header = '';
    $scope.titels = [
        {titel: '', id: 'work_activities', name: 'group'},
    ];
}]);

app.controller('ctrl_project_name', ['$scope', function ($scope) {
    $scope.header = '';
    $scope.titels = [
        {titel: '', id: 'project_name', name: 'group'},
    ];
}]);

/* $audience = array('consumers'=> 1,'representatives'=> 1,'organizations'=> 1,'fields'=> 1,'other'=> 1);*/

app.controller('ctrl_audience', function ($scope) {
    $scope.header = 'Целевая аудитория (обобщенно):';
    $scope.otherinput = {titel: 'Опишите Вашу целевую аудиторию', id: 'more_info', name: 'group'};
    // Initialize my model - this is important!
    $scope.my = {checked: false};


    $scope.items = [{
        'id': 'consumers',
        'type': 'checkbox',
        'name': 'group',
        'titel': 'Индивидуальные потребители',
        'tooltip': 'Самый большой вид целевой аудитории. Это практически все население страны. Они покупают товары и услуги для себя , членов их семей, для дома, сада, для детей, любимых питомцев, друзей и т.п.'
    }, {
        'id': 'representatives',
        'type': 'checkbox',
        'name': 'group',
        'titel': 'Специалисты и профессионалы в определенных сферах деятельности',
        'tooltip': 'Это  врачи, учителя, бухгалтера, юристы, аудиторы, нотариусы, преподаватели вузов, дизайнеры, фрилансеры, водители, рабочие разных специальностей и т.п.'
    }]

    $scope.items2 = [{
        'id': 'organizations',
        'type': 'checkbox',
        'name': 'group',
        'titel': 'Торговые организации',
        'tooltip': 'Организации и индивидуальные предприниматели, занимающиеся торговлей.'
    }, {
        'id': 'fields',
        'type': 'checkbox',
        'name': 'group',
        'titel': 'Представители делового мира / компании',
        'tooltip': 'Директора коммерческих и некоммерческих организаций, индивидуальные предприниматели, фермеры и т.п.'
    }, {
        'id': 'other',
        'type': 'checkbox',
        'name': 'group',
        'titel': 'Рассказать подробнее..',
        'tooltip': 'Расскажите подробно о вашей целевой  аудитории'
        , 'ng-model': 'my.checked'
    }]

});

app.directive('attrs', function () {
    return {
        link: function (scope, element, attrs) {
            var attrs = angular.copy(scope.$eval(attrs.attrs));
            element.attr(attrs).html(attrs.html);
        }
    };
});

