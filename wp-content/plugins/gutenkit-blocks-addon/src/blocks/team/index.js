import { registerBlockType } from '@wordpress/blocks';
import './style.scss';

/**
 * Internal dependencies
 */
import Edit from './edit';
import save from './save';
import metadata from './block.json';


registerBlockType(metadata.name, {
	/**
	 * @see ./edit.js
	 */
	icon: {
		src: <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><title>team</title><path d="M28.233 15.229c-1.089-0.544-3.13-0.551-3.217-0.551-0.259 0-0.469 0.21-0.469 0.469s0.21 0.469 0.469 0.469c0.527 0 2.056 0.081 2.798 0.452 0.067 0.034 0.139 0.050 0.209 0.050 0.172 0 0.337-0.095 0.42-0.259 0.116-0.232 0.022-0.513-0.21-0.629zM30.57 21.903l-1.936-0.553c-0.084-0.024-0.142-0.101-0.142-0.188v-0.646c0.157-0.109 0.308-0.231 0.448-0.368 0.681-0.66 1.055-1.546 1.055-2.495v-0.892l0.187-0.374c0.205-0.411 0.314-0.871 0.314-1.33v-2.416c0-0.259-0.21-0.469-0.469-0.469h-4.511c-1.64 0-2.975 1.335-2.975 2.975v0.028c0 0.382 0.090 0.765 0.261 1.106l0.24 0.48v0.766c0 1.213 0.598 2.302 1.504 2.957l0 0.677c0 0.104 0 0.148-0.387 0.258l-0.945 0.27-2.733-0.994c0.010-0.129-0.034-0.26-0.128-0.359l-0.873-0.917v-1.54c0.092-0.076 0.183-0.154 0.271-0.237 1.102-1.032 1.733-2.49 1.733-3.999v-1.23c0.333-0.724 0.501-1.49 0.501-2.279v-5.012c0-0.259-0.21-0.469-0.469-0.469h-7.017c-2.469 0-4.478 2.009-4.478 4.478v1.002c0 0.789 0.169 1.555 0.501 2.279v1.058c0 1.752 0.779 3.331 2.005 4.372v1.576l-0.873 0.917c-0.094 0.099-0.138 0.23-0.128 0.359l-2.884 1.049c-0.209 0.076-0.403 0.179-0.579 0.304l-0.453-0.226c1.348-0.587 1.775-1.412 1.796-1.453 0.066-0.132 0.066-0.287 0-0.419-0.338-0.676-0.379-1.915-0.412-2.91-0.011-0.331-0.021-0.644-0.041-0.923-0.16-2.248-1.869-3.944-3.976-3.944s-3.816 1.695-3.976 3.944c-0.020 0.279-0.030 0.592-0.041 0.923-0.033 0.995-0.074 2.234-0.412 2.91-0.066 0.132-0.066 0.287 0 0.419 0.020 0.041 0.447 0.865 1.798 1.452l-1.258 0.629c-0.672 0.337-1.090 1.012-1.090 1.764v3.463c0 0.259 0.21 0.469 0.469 0.469s0.469-0.21 0.469-0.469v-3.463c0-0.395 0.219-0.749 0.572-0.926l1.566-0.783 0.545 0.518c0.381 0.362 0.87 0.543 1.359 0.543s0.978-0.181 1.359-0.543l0.545-0.518 0.511 0.255c-0.24 0.385-0.377 0.836-0.377 1.309v3.608c0 0.259 0.21 0.469 0.469 0.469s0.469-0.21 0.469-0.469v-3.608c0-0.643 0.406-1.224 1.011-1.444l3.041-1.106 1.266 1.899c0.162 0.243 0.421 0.398 0.711 0.427 0.032 0.003 0.065 0.005 0.097 0.005 0.256 0 0.501-0.101 0.685-0.284l0.772-0.772v4.883c0 0.259 0.21 0.469 0.469 0.469s0.469-0.21 0.469-0.469v-4.883l0.772 0.772c0.183 0.183 0.429 0.284 0.685 0.284 0.032 0 0.064-0.002 0.097-0.005 0.29-0.029 0.55-0.184 0.712-0.427l1.266-1.899 3.041 1.106c0.605 0.22 1.011 0.8 1.011 1.444v3.608c0 0.259 0.21 0.469 0.469 0.469s0.469-0.21 0.469-0.469v-3.608c0-0.652-0.259-1.263-0.693-1.715l0.116-0.033c0.117-0.033 0.276-0.079 0.436-0.157l1.197 1.197v4.317c0 0.259 0.21 0.469 0.469 0.469s0.469-0.21 0.469-0.469v-4.317l1.189-1.189c0.063 0.032 0.13 0.059 0.199 0.079l1.936 0.553c0.442 0.126 0.751 0.535 0.751 0.995v3.878c0 0.259 0.21 0.469 0.469 0.469s0.469-0.21 0.469-0.469v-3.878c0-0.876-0.588-1.656-1.43-1.897zM3.007 21.075c-0.877-0.316-1.317-0.736-1.504-0.966 0.128-0.335 0.211-0.718 0.267-1.122 0.259 0.62 0.691 1.149 1.237 1.526v0.562zM5.692 22.343c-0.4 0.38-1.026 0.38-1.426-0l-0.436-0.414c0.074-0.138 0.114-0.294 0.114-0.458v-0.5c0.327 0.102 0.675 0.157 1.035 0.157s0.707-0.055 1.035-0.157l-0 0.499c0 0.164 0.040 0.32 0.114 0.458l-0.436 0.414zM4.98 20.191c-1.4 0-2.538-1.139-2.538-2.538 0-0.259-0.21-0.469-0.469-0.469-0.026 0-0.052 0.003-0.077 0.007 0.001-0.040 0.003-0.081 0.004-0.121 0.010-0.322 0.020-0.627 0.039-0.888 0.060-0.842 0.396-1.618 0.948-2.186 0.556-0.572 1.3-0.887 2.093-0.887s1.537 0.315 2.093 0.887c0.551 0.567 0.888 1.343 0.948 2.186 0.018 0.261 0.029 0.565 0.039 0.888 0.001 0.028 0.002 0.056 0.003 0.084-0.51-0.786-1.298-1.365-2.315-1.692-0.94-0.302-1.749-0.283-1.783-0.283-0.123 0.003-0.239 0.055-0.324 0.143l-0.846 0.877c-0.18 0.186-0.174 0.483 0.012 0.663s0.483 0.174 0.663-0.012l0.704-0.73c0.606 0.030 2.556 0.256 3.314 1.926-0.191 1.23-1.248 2.144-2.507 2.144zM6.952 21.076l0-0.559c0.545-0.375 0.979-0.904 1.238-1.528 0.056 0.404 0.139 0.786 0.267 1.12-0.187 0.227-0.629 0.652-1.505 0.967zM11.463 13.472v-1.163c0-0.071-0.016-0.14-0.047-0.204-0.302-0.625-0.455-1.287-0.455-1.97v-1.002c0-1.952 1.588-3.541 3.541-3.541h6.548v4.543c0 0.682-0.153 1.345-0.455 1.97-0.031 0.064-0.047 0.133-0.047 0.204v1.335c0 1.269-0.51 2.447-1.437 3.315-0.116 0.108-0.236 0.21-0.36 0.305-0.003 0.002-0.005 0.004-0.008 0.006-0.868 0.659-1.931 0.979-3.042 0.907-2.378-0.154-4.24-2.221-4.24-4.705zM14.102 22.904c-0.003 0.003-0.011 0.011-0.026 0.009s-0.021-0.010-0.024-0.014l-1.458-2.187 0.469-0.493 2.212 1.512-1.173 1.173zM16.006 21.095l-2.538-1.735v-0.875c0.657 0.355 1.392 0.577 2.174 0.628 0.124 0.008 0.246 0.012 0.369 0.012 0.896 0 1.759-0.214 2.534-0.621v0.856l-2.538 1.735zM17.96 22.899c-0.003 0.004-0.009 0.013-0.024 0.014s-0.023-0.006-0.026-0.009l-1.173-1.173 2.212-1.512 0.469 0.493-1.458 2.187zM26.519 22.503l-1.064-1.064c0.019-0.084 0.029-0.177 0.029-0.278l-0-0.198c0.295 0.097 0.606 0.154 0.928 0.164 0.036 0.001 0.072 0.002 0.108 0.002 0.356 0 0.703-0.054 1.034-0.156v0.189c0 0.093 0.012 0.185 0.034 0.273l-1.069 1.069zM28.287 19.475c-0.497 0.482-1.153 0.737-1.846 0.715-1.357-0.041-2.46-1.236-2.46-2.663v-0.876c0-0.073-0.017-0.145-0.049-0.21l-0.29-0.579c-0.106-0.212-0.162-0.45-0.162-0.687v-0.028c0-1.123 0.914-2.037 2.037-2.037h4.042v1.947c0 0.315-0.074 0.63-0.215 0.911l-0.237 0.473c-0.033 0.065-0.049 0.137-0.049 0.21v1.002c0 0.692-0.274 1.34-0.771 1.822zM29.526 24.201c-0.259 0-0.469 0.21-0.469 0.469v3.007c0 0.259 0.21 0.469 0.469 0.469s0.469-0.21 0.469-0.469v-3.007c0-0.259-0.21-0.469-0.469-0.469zM2.474 24.82c-0.259 0-0.469 0.21-0.469 0.469v2.388c0 0.259 0.21 0.469 0.469 0.469s0.469-0.21 0.469-0.469v-2.388c0-0.259-0.21-0.469-0.469-0.469zM19.846 10.305c-1.773-1.773-5.482-1.434-6.995-1.206-0.476 0.072-0.822 0.475-0.822 0.959v1.080c0 0.259 0.21 0.469 0.469 0.469s0.469-0.21 0.469-0.469v-1.080c0-0.016 0.011-0.030 0.024-0.032 0.604-0.091 1.803-0.232 3.045-0.149 1.462 0.097 2.52 0.464 3.147 1.091 0.183 0.183 0.48 0.183 0.663 0s0.183-0.48 0-0.663zM10.493 25.203c-0.259 0-0.469 0.21-0.469 0.469v2.005c0 0.259 0.21 0.469 0.469 0.469s0.469-0.21 0.469-0.469v-2.005c0-0.259-0.21-0.469-0.469-0.469zM21.519 25.203c-0.259 0-0.469 0.21-0.469 0.469v2.005c0 0.259 0.21 0.469 0.469 0.469s0.469-0.21 0.469-0.469v-2.005c0-0.259-0.21-0.469-0.469-0.469z"></path></svg>,
	},
	edit: Edit,

	/**
	 * @see ./save.js
	 */
	save,
});