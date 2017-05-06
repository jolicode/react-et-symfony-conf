import React, { Component } from 'react';

export default class Todo extends Component {
  constructor() {
	super();

	this.state = {
	  visible: true,
	};

	this.markAsDone = this.markAsDone.bind(this);
	}

	markAsDone() {
	  this.setState({
		visible: false,
	  });
	}

	render() {
	  if (!this.state.visible) {
		return null;
	  }

	  return (
		<li style={{marginBottom: '5px'}}>
		  <span>{this.props.item}</span>
		  <button
			  style={{marginLeft: '5px'}}
			  className="btn btn-xs btn-primary"
			  onClick={this.markAsDone}>
			  Fait
		  </button>
		</li>
	  );
  }
}
