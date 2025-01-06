const instamojo_settings = window.wc.wcSettings.getSetting( 'instamojo_data', {} );
const instamojo_label = window.wp.htmlEntities.decodeEntities( instamojo_settings.title ) || window.wp.i18n.__( 'Instamojo', 'instamojo' );
const Instamojo_Content = () => {
    return window.wp.htmlEntities.decodeEntities( instamojo_settings.description || '' );
};

const Instamojo_label = (props) => {
	var icon = React.createElement('img', {
		src: 'https://im-testing.im-cdn.com/assets/images/favicon.6d3d153d920c.png',
	});
	var span = React.createElement('span', {
		className: 'wc-block-components-payment-method-label wc-block-components-payment-method-label--with-icon',
	}, window.wp.htmlEntities.decodeEntities(instamojo_settings.title) || defaultLabel, icon);
	return span;
};

const Instamojo_Block_Gateway = {
    name: 'instamojo',
    label: React.createElement(Instamojo_label, null),
	edit: React.createElement(Instamojo_label, null),
	icons: null,
    content: Object( window.wp.element.createElement )( Instamojo_Content, null ),
    canMakePayment: () => true,
    ariaLabel: instamojo_label,
    supports: {
        features: instamojo_settings.supports,
    },
};
window.wc.wcBlocksRegistry.registerPaymentMethod( Instamojo_Block_Gateway );