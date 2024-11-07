import './bootstrap';
import '../css/app.css';
import '../css/themes/classic.css';
import '../css/themes/cuba.css';

// Определите текущую тему из сессии или используйте класс 'classic' по умолчанию
let theme = document.documentElement.dataset.theme || 'classic';

// Примените соответствующий класс темы к <body>
document.body.classList.add(`theme-${theme}`);
