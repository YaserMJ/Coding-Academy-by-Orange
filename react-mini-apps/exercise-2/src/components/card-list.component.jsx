import React, { Component } from 'react'
import Card from './card.component';
export default class CardList extends Component {
    constructor(props){
        super(props);
        this.state ={
            people:  [
                {
                    name: 'John Smith',
                    email: 'jsmith@test.com',
                    num: 123456789,
                    id: 1,
                    state: 'Aqaba',
                    country: 'Jordan',
                    org: 'hehe organization',
                    job: 'software developer'

                },
                {
                    name: 'ABCD',
                    email: 'abcd@test.com',
                    num: 987654321,
                    id: 2,
                    state: 'California',
                    country: 'USA',
                    org: 'hehe organization two',
                    job: 'hacker'

                },
                {
                    name: 'Tyrion',
                    email: 'tyrion@test.com',
                    num: 1234512345,
                    id: 3,
                    state: 'Beeb state',
                    country: 'Toot',
                    org: 'hehe organization three',
                    job: 'cracker'

                },
    ]

               
        }
    }
    render() {
        const {people} = this.state;
        return (
            <div>
                {
                  people.map(p =>(
                      <Card name={p.name} email={p.email} num={p.num}/>
                  ))  
                }
            </div>
        )
    }
}
