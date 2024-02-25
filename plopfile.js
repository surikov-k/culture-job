const setGenerator = function (plop) {
  plop.setGenerator('scss-component', {
    description: 'Generate a SCSS component',
    prompts: [
      {
        type: 'input',
        name: 'name',
        message: 'Enter the name of the SCSS component:',
      },
    ],
    actions: [
      {
        type: 'add',
        path: 'src/scss/blocks/_{{name}}.scss',
        templateFile: 'plop-templates/scss-component.hbs',
      },
      {
        type: 'append',
        path: 'src/scss/style.scss',
        template: `@import "blocks/{{name}}";`,
      },
    ],
  });
};

export default setGenerator;
