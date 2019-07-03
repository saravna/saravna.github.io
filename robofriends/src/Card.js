import React, {Component} from 'react';
import './Card.css';

class Card extends Component{
    render(){
        let name=this.props.name;
        let source='http://robohash.org/'+name+'?200x200';
        let mail=name+'@gmail.com';
        return(
            <div className="tc bg-light-red dib pa4 ma3 br3 grow card">
                <img alt='' src={source}/>
                <div>
                    <h3>{name}</h3>
                    <p>{mail}</p>
                </div>
            </div>
        );
    }
}
export default Card;